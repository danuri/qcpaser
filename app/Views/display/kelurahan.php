<table class="table table-striped align-middle" style="width:100%">
    <thead class="">
        <tr>
            <th>Kelurahan</th>
            <th>TPS Sample</th>
            <th>Suara Masuk (%)</th>
            <th>(1) Fahmi Fadli-Ikhwan Antasari</th>
            <th>(2) Syarifah Masitah-Denni Mappa</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($kelurahan as $row) {
            $suaramasuk = ($row->kandidat1 + $row->kandidat2);
            $progressuara = ($suaramasuk / $row->dpt) * 100;
        ?>
            <tr>
                <td><a href="javascript:;" onclick="disttps(<?= $row->kelurahan_id?>)"><?= $row->kelurahan_name ?></a></td>
                <td><?= $row->dpt ?></td>
                <td class="text-center"><?= shortdec($progressuara) ?></td>
                <td class="text-center"><?= ($row->kandidat1) ? shortdec(($row->kandidat1 / $suaramasuk) * 100) : 0; ?></td>
                <td class="text-center"><?= ($row->kandidat2) ? shortdec(($row->kandidat2 / $suaramasuk) * 100) : 0; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>