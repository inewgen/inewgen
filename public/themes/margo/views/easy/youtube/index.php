<div id="content">
    <div class="container">
        <div class="row sidebar-page">

            <div class="col-md-12 page-content">
                <!-- Search Widget -->
                <div class="widget widget-search">
                    <form action="http://www.inewgen.com/clips" method="get">
                        <div id="player"></div>
                    </form>

                    <hr/>
                    <h3>Songs in queue</h3>
                    <table id="example" border="1" style="border-color: lightgray;" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background-color: lightgray">
                                <th>id</th>
                                <!-- <th>code</th> -->
                                <th>name</th>
                                <th>artist</th>
                                <th>url</th>
                                <th>description</th>
                                <!-- <th>user_id</th> -->
                                <th>position</th>
                                <!-- <th>type</th> -->
                                <th>status</th>
                                <!-- <th>updated_at</th> -->
                                <th>created_at</th>
                            </tr>
                        </thead>
                        <tbody>
<?php if (isset($youtube) && is_array($youtube)): ?>
<?php foreach ($youtube as $value): ?>
                            <tr>
                                <td><?php echo array_get($value, 'id', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'code', ''); ?></td> -->
                                <td><?php echo array_get($value, 'name', ''); ?></td>
                                <td><?php echo array_get($value, 'artist', ''); ?></td>
                                <td>
                                    <a href="<?php echo array_get($value, 'url', ''); ?>" target="_blank">
                                        <?php echo array_get($value, 'code', ''); ?>
                                    </a>
                                </td>
                                <td><?php echo array_get($value, 'description', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'user_id', ''); ?></td> -->
                                <td><?php echo array_get($value, 'position', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'type', ''); ?></td> -->
                                <td><?php echo array_get($value, 'status', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'updated_at', ''); ?></td> -->
                                <td><?php echo array_get($value, 'created_at', ''); ?></td>
                            </tr>
<?php endforeach; ?>
<?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>