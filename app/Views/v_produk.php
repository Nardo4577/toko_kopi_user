<a href="/">ke halaman home</a>
<h1>Daftar Produk</h1>
<table width = "100%" cellpadding = "10" cellspacing = "0" border="1">
    <tr>
        <th>No</th>
        <th>Nama Produk</th>
        <th>Harga Produk</th>
        <th>Aksi</th>
    </tr>
    <tr>
        <td>1</td>
        <td>Buku</td>
        <td>10000</td>
        <td><a href="">Beli</a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Pensil</td>
        <td>5000</td>
        <td><a href="">Beli</a></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Penghapus</td>
        <td>2000</td>
        <td><a href="">Beli</a></td>
    </tr>   
    <tr>
        <td>4</td>
        <td>Penggaris</td>
        <td>3000</td>
        <td><a href="">Beli</a></td>
    </tr>
</table>

<?php foreach ($dataproduk as $produk) { ?>
    <tr>
        <td><?php echo $produk['nama']; ?></td>
        <td><?php echo $produk['harga']; ?></td>
        <td><?php echo $produk['stok']; ?></td>
        <td><a href="">Beli</a></td>
    </tr>
    
<?php } ?>