function pesan(form){
    if (form.nama.value == ""){
        alert("Nama Harus di isi")
        form.nama.focus()
        return (false)
    }
    if (form.alamat.value == ""){
        alert("Alamat Harus di isi")
        return (false)
    }
    if (form.nomor.value == ""){
        alert( "Nomor Hp Harus di isi")
        return (false)
    }
    if (form.barang.value == ""){
        alert( "Detail barang Harus di isi")
        return (false)
    } 
    if(form.bayar.value == ""){
        alert("lakukan pembayaran terlebih dahulu dan kirim bukti kembalian di bawah")
        return (false)
    }
    alert( "Terima kasih " + form.nama.value + " Telah nitip barang, Barang dapat di terima dalam waktu 1 minggu ")
    return(true)
}