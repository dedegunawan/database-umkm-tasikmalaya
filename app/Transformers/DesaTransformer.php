<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Desa;

class DesaTransformer extends TransformerAbstract
{
    /**
     * @return  array
     */
    public function transform(Desa $desa)
    {
        $umkms = $desa->umkm;
        return [
            'id'                => (int) $desa->id,
            'kode_login'        => $desa->kode_login,
            'nama_desa'         => $desa->nama_desa,
            'nama_kepala_desa'  => $desa->nama_kepala_desa,
            'logo_desa'         => $desa->logo_desa,
            'latitude'          => $desa->latitude,
            'longitude'         => $desa->longitude,
            'jumlah_umkm'       => $umkms->count(),
        ];
    }
}
