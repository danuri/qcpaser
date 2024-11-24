<table class="table table-bordered table-striped align-middle" style="width:100%">
    <thead class="">
        <tr>
            <th>TPS</th>
            <th>TPS Sample</th>
            <th>Suara Masuk (%)</th>
            <th>(1) Fahmi - Ikhwan (%)</th>
            <th>(2) Syarifah - Denni (%)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($tps as $row) {

            $suaramasuk = $row->kandidat1 + $row->kandidat2;
        ?>
            <tr>
                <td><?= $row->tps_name ?></td>
                <td><?= $row->tps_dpt ?></td>
                <td><a href="">Lihat Lampiran</a></td>
                <td class="text-center"><?= ($row->kandidat1) ? shortdec(($row->kandidat1 / $suaramasuk) * 100) : 0; ?></td>
                <td class="text-center"><?= ($row->kandidat2) ? shortdec(($row->kandidat2 / $suaramasuk) * 100) : 0; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>