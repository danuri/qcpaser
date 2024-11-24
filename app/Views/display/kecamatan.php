<table class="table table-striped align-middle" style="width:100%">
    <thead class="">
        <tr>
            <th>Kecamatan</th>
            <th>TPS Sample</th>
            <th>Suara Masuk (%)</th>
            <th>(1) Fahmi - Ikhwan (%)</th>
            <th>(2) Syarifah - Denni (%)</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($kecamatan as $row) {
            $suaramasuk = ($row->kandidat1 + $row->kandidat2);
            $progressuara = ($suaramasuk / $row->dpt) * 100;
        ?>
            <tr>
                <td><a href="javascript:;" onclick="distkelurahan(<?= $row->kecamatan_id?>)"><?= $row->kecamatan_name ?></a></td>
                <td><?= $row->dpt ?></td>
                <td class="text-center"><?= shortdec($progressuara) ?></td>
                <td class="text-center"><?= ($row->kandidat1) ? shortdec(($row->kandidat1 / $suaramasuk) * 100) : 0; ?></td>
                <td class="text-center"><?= ($row->kandidat2) ? shortdec(($row->kandidat2 / $suaramasuk) * 100) : 0; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>