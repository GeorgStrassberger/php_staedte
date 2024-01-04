<?php if (!empty($cities)) : ?>
    <table>
        <thead>
            <tr>
                <th>Name der Stadt</th>
                <th>Postleitzahl</th>
                <th>Bevölkerung</th>
                <th>Fläche</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cities as $city) : ?>
                <tr>
                    <td><?php echo e($city['title']) ?></td>
                    <td><?php echo e($city['zip']) ?></td>
                    <td><?php echo e($city['population']) ?></td>
                    <td><?php echo e($city['area']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
<?php endif; ?>