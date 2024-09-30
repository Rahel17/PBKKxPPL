<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
            width: 100%;
            max-width: 1000px; 
            margin: auto;
        }

        .formbold-form-wrapper {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .formbold-form-title {
            margin-bottom: 30px;
        }

        .formbold-form-title h2 {
            font-weight: 600;
            font-size: 28px;
            color: #07074d;
        }

        .formbold-form-title p {
            font-size: 16px;
            color: #536387;
            margin-top: 12px;
        }

        .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
        }

        .formbold-input-flex > div {
            flex: 1; 
        }

        .formbold-form-input {
            width: 100%;
            padding: 12px 20px;
            border-radius: 5px;
            border: 1px solid #dde3ec;
            background: #ffffff;
            font-size: 16px;
            color: #536387;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
        }

        .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .formbold-form-label {
            color: #536387;
            font-size: 14px;
            display: block;
            margin-bottom: 8px;
        }

        .formbold-checkbox-wrapper {
            display: flex;
            align-items: center;
            margin-top: 20px;
        }

        .formbold-checkbox-label {
            display: flex;
            cursor: pointer;
            user-select: none;
            font-size: 16px;
            color: #536387;
        }

        .formbold-checkbox-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border: 0.7px solid #dde3ec;
            border-radius: 3px;
            position: relative;
        }

        .formbold-btn {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            background-color: #6a64f1;
            color: white;
            cursor: pointer;
            margin-top: 25px;
            transition: background-color 0.3s, box-shadow 0.3s;
        }

        .formbold-btn:hover {
            background-color: #5b54d3;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            <form action="{{ route('store') }}" method="post">
                @csrf
                <div class="formbold-form-title">
                    <h2>Input Data</h2>
                    <p>Lakukan input dengan benar agar tidak merugi</p>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="no" class="formbold-form-label">No</label>
                        <input type="number" name="no" id="no" class="formbold-form-input" placeholder="No" required>
                    </div>
                    <div>
                        <label for="hari_tanggal" class="formbold-form-label">Hari/Tanggal</label>
                        <input type="date" name="hari_tanggal" id="hari_tanggal" class="formbold-form-input" required>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="uraian" class="formbold-form-label">Uraian</label>
                        <input type="text" name="uraian" id="uraian" class="formbold-form-input" placeholder="Uraian" required>
                    </div>
                    <div>
                        <label for="bidang" class="formbold-form-label">Bidang</label>
                        <input type="text" name="bidang" id="bidang" class="formbold-form-input" placeholder="Bidang" required>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="pemasukan" class="formbold-form-label">Pemasukan</label>
                        <input type="decimal" name="pemasukan" id="pemasukan" class="formbold-form-input" placeholder="Pemasukan" required>
                    </div>
                    <div>
                        <label for="pengeluaran" class="formbold-form-label">Pengeluaran</label>
                        <input type="decimal" name="pengeluaran" id="pengeluaran" class="formbold-form-input" placeholder="Pengeluaran" required>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="total" class="formbold-form-label">Total</label>
                        <input type="decimal" name="total" id="total" class="formbold-form-input" placeholder="Total" required>
                    </div>
                    <div>
                        <label for="penerima_pemberi" class="formbold-form-label">Penerima/Pemberi</label>
                        <input type="text" name="penerima_pemberi" id="penerima_pemberi" class="formbold-form-input" placeholder="Penerima/Pemberi" required>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <label for="bukti_transaksi" class="formbold-form-label">Bukti Transaksi</label>
                        <input type="boolean" name="bukti_transaksi" id="bukti_transaksi" class="formbold-form-input" placeholder="Ada/Tidak" required>
                    </div>
                    <div>
                        <label for="status_spj" class="formbold-form-label">Status SPJ</label>
                        <input type="enum" name="status_spj" id="status_spj" class="formbold-form-input" placeholder="Status SPJ" required>
                    </div>
                </div>
                <button type="submit" class="formbold-btn">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
