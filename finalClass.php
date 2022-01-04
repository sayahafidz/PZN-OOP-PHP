<?php

// jika sebuah class memiliki kata kunci final maka kelas tsb tidak akan bisa diwariskan lagi (class tsb sudah masuk ke final)
// jika class yang meiliki kata kunci final diwariskan maka child class tsb akan error

class socialMedia
{
    public string $name;
}

final class facebook extends socialMedia
{
}

class fakefacebook extends facebook
{
}
