<h1>view buku</h1>

<table>
    <th>
        <td>Judul Buku</td>
    </th>
    <tr>

        <?php foreach($rows as $row) :?>
            <td><?= $row["judul_buku"]; ?></td>
        <?php endforeach; ?>
    </tr>
</table>

