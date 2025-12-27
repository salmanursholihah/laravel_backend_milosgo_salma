<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Vendor Approved</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">

    <h2>Selamat 🎉</h2>

    <p>
        Halo <strong>{{ $vendor->user->name }}</strong>,
    </p>

    <p>
        Request Anda untuk menjadi vendor dengan nama toko
        <strong>{{ $vendor->shop_name }}</strong>
        telah <strong style="color: green;">DISETUJUI</strong>.
    </p>

    <p>
        Sekarang Anda sudah dapat login dan mulai berjualan di platform kami.
    </p>

    <p style="margin-top: 20px;">
        <a href="{{ url('/login') }}"
           style="
                background-color: #4CAF50;
                color: #ffffff;
                padding: 10px 16px;
                text-decoration: none;
                border-radius: 4px;
           ">
            Login Sekarang
        </a>
    </p>

</body>
</html>
