<?php $this->extend('template/page'); ?>
<?php $this->section('invoice'); ?>
<div class="content">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
                        <li class="breadcrumb-item active">Home/Invoice</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice Pembayaran Tagihan Listrik</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .faktur {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
        .faktur h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .info-faktur {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .item-faktur {
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .total {
            text-align: right;
            margin-top: 20px;
            font-weight: bold;
        }
        .status {
            text-align: right;
            margin-top: 10px;
            font-weight: bold;
        }
        .action-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .action-buttons button {
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="faktur">
        <h2>Invoice Pembayaran Tagihan Listrik</h2>
        <div class="info-faktur">
            <span>Nomor Faktur: INV123456</span>
            <span>Tanggal: 21 Juli 2023</span>
        </div>
        <div class="info-faktur">
            <span>Nama Pelanggan: Rismawati Dewi</span>
            <span>Tanggal Pembayaran: 10 Agustus 2023</span>
        </div>
        <div class="item-faktur">
            <span>Deskripsi</span>
            <span>Jumlah (Rupiah)</span>
        </div>
        <div class="item-faktur">
            <span>Pemakaian Listrik</span>
            <span>RP 100.000</span>
        </div>
        <div class="item-faktur">
            <span>Biaya Admin</span>
            <span>Rp 2.500</span>
        </div>
        <div class="total">
            <span>Total: Rp 102.500</span>
        </div>
        <div class="status">
            <span>Status: Lunas (Sudah Dibayar)</span>
        </div>
        <div class="action-buttons">
            <button onclick="printFaktur()">Print</button>
            <button onclick="downloadPDF()">Download PDF</button>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.10.2/jspdf.umd.min.js"></script>
    
    <script>
     
        function printFaktur() {
            window.print();
        }

        function downloadPDF() {
            const faktur = document.querySelector(".faktur");
            const pdf = new jsPDF();
            pdf.fromHTML(faktur, 15, 15, { 'width': 170 });
            pdf.save("Faktur_Pembayaran.pdf");
        }
    </script>
</body>
</html>

<?php $this->endSection(); ?>