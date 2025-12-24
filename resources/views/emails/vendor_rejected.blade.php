<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Vendor Request Rejected</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">

    <h2>Mohon Maaf 🙏</h2>

    <p>
        Halo <strong>{{ $vendor->user->name }}</strong>,
    </p>

    <p>
        Terima kasih telah mengajukan permintaan untuk menjadi vendor
        dengan nama toko <strong>{{ $vendor->shop_name }}</strong>.
    </p>

    <p>
        Setelah kami lakukan peninjauan, dengan berat hati kami informasikan
        bahwa permintaan Anda
        <strong style="color: red;">DITOLAK</strong>.
    </p>

    <p>
        Anda dapat mengajukan kembali permintaan vendor di lain waktu
        dengan melengkapi data yang dibutuhkan.
    </p>

    <p style="margin-top: 20px;">
        <a href="{{ url('/login') }}"
           style="
                background-color: #dc3545;
                color: #ffffff;
                padding: 10px 16px;
                text-decoration: none;
                border-radius: 4px;
           ">
            Login
        </a>
    </p>

</body>
</html>
