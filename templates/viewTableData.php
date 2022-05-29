<h2><?=$query;?> query:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <?php
                        foreach($tableColumTitle as $title) { ?>
                            <th scope="col"><?=$title;?></th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach($rows as $key => $row) { ?>
                <tr>
                    <th scope="row"><?=++$key?></th>
                    <?php
                        foreach($row as $item) { ?>
                            <td><?=$item;?></td>
                    <?php } ?>
                </tr>
            <?php } ?>  
            </tbody>
        </table>