<?php 
    // date
    // untuk menampilkan tgl dg format tertentu
    // l=hari, d=tgl, m=bulan, y=tahun sc: php.net
    // echo date("l, d-M-Y"); 

    // time
    // UNIX TImestamp / EPOCH time
    // detik yang sudah berlalu seak 1 januari 1970
    // echo time ();
    // echo date("l", time()-60*60*24*100)

    // mktime
    // membuat sendiri detik
    // mktime(0,0,0,0,0,0,)
    // jam,menit,detik,bulan,tgl,tahun
    echo date("l M Y", mktime(0,0,0,8,25,1985));

    // strtotime
    // echo date(strtotime("25 aug 1985"));
?>