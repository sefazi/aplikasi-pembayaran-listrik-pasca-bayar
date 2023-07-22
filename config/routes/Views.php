<?php

namespace Routes;

class Views
{
    public $param;
    /**
     * -------------------------------------------------------------------
     * VIEW
     * -------------------------------------------------------------------
     * This function is used for including the view file
     * this function are not returning the error syntax
     * in each including file.
     *
     * @var string
     */
    public function view(string $file, $data = [])
    {
        // Throw data array
        $this->param = $data;

        // Make a variable each index of array
        extract($data, EXTR_SKIP);

        // Clear data when the variable are made
        unset($data);


        // Require the file
        if (is_file(JUMPUP . VIEWSPATH . $file . PHPEXT)) {
            try {
                require_once JUMPUP . VIEWSPATH . $file . PHPEXT;
            } catch (\Throwable $th) {
                error_redirect(['message' => $th->getMessage()]);
                die();
            }
        } else {
            $data = [
                'title' => '404 Page not found',
                'headline' => '404',
                'header' => 'Oops! Page not found',
                'message' => 'We could not find the <b>' . $file . '</b> you were looking for.'
            ];
            error_redirect($data);
            die();
        }
    }


    private $sections = [];
    private $masterView = null;

    public function section($sectionName)
    {
        ob_start();
        $this->sections[$sectionName] = '';
    }

    public function endSection()
    {
        $lastKey = array_key_last($this->sections);
        $this->sections[array_key_last($this->sections)] = ob_get_clean();
        $this->renderMaster($this->param);
    }

    public function renderSection($sectionName)
    {
        if (isset($this->sections[$sectionName])) {
            echo $this->sections[$sectionName];
        }
    }

    public function extend($masterView)
    {
        $this->masterView = $masterView;
    }

    public function renderMaster($data = [])
    {
        // Make a variable each index of array
        extract($data, EXTR_SKIP);

        // Clear data when the variable are made
        unset($data);

        if ($this->masterView !== null) {
            if (is_file(JUMPUP . VIEWSPATH . $this->masterView . PHPEXT)) {
                try {
                    require_once JUMPUP . VIEWSPATH . $this->masterView . PHPEXT;
                } catch (\Throwable $e) {
                    $data = [
                        'title' => '404 Page not found',
                        'headline' => '404',
                        'header' => 'Oops! Page not found',
                        'message' => 'We could not find the ' . $e->getMessage() . ' you were looking for.'
                    ];
                    error_redirect($data);
                    die();
                }
            } else {
                $data = [
                    'title' => '404 Page not found',
                    'headline' => '404',
                    'header' => 'Oops! Page not found',
                    'message' => 'We could not find the <b>' . $this->masterView . '</b> you were looking for.'
                ];
                error_redirect($data);
                die();
            }
        }
    }
}
