<h2>Withdraw Berhasil Diproses</h2>

<p>Halo <strong>{{ $withdraw->vendor->user->name }}</strong>,</p>

<p>Permintaan withdraw Anda telah <strong>disetujui</strong> oleh admin.</p>

<hr>

<p>
<strong>Jumlah Withdraw:</strong> Rp {{ number_format($withdraw->withdraw_amount) }}<br>
<strong>Biaya Admin:</strong> Rp {{ number_format($withdraw->withdraw_charge) }}<br>
<strong>Bank:</strong> {{ $withdraw->bank_name }}<br>
<strong>No Rekening:</strong> {{ $withdraw->account_number }}
</p>

<p>Dana akan segera masuk ke rekening Anda.</p>

<p>Terima kasih,<br>
<strong>{{ config('app.name') }}</strong></p>
