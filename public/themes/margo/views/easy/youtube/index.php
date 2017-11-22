<div id="content">
    <div class="container">
        <div class="row sidebar-page">

            <div class="col-md-12 page-content">
                <!-- Search Widget -->
                <div class="widget widget-search">
                <?php   if (empty(array_get($youtube, '0.code', ''))): ?>
                    <div class="text-center" style="margin-top: 200px">
                        <h3>ไม่มีเพลงในรายการ (<a target="_blank" href="<?php echo url('youtube/add'); ?>">+ เพิ่มเพลง</a>)</h3>
                    </div>
                <?php   else: ?>
                    <div id="player"></div>
                    <div>
                        <h3>
                        <?php echo array_get($youtube, '0.name', ''); ?>
                        <span style="color: grey"><?php echo array_get($youtube, '0.artist', ''); ?></span>
                        <?php if (!empty(array_get($youtube, '0.description', ''))): ?>
                            <b style="color: red">(<?php echo array_get($youtube, '0.description', ''); ?>)</b>
                        <?php endif; ?>
                        </h3>
                    </div>
                    <hr/>
                    <h3>รายชื่อเพลงที่เพิ่มไว้ (<a target="_blank" href="<?php echo url('youtube/add'); ?>">+ เพิ่มเพลง</a>)</h3>
                    <table id="example" border="1" style="border-color: lightgray;" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background-color: lightgray">
                                <th class="text-center">ลำดับที่</th>
                                <!-- <th>code</th> -->
                                <th class="text-center">ชื่อเพลง</th>
                                <th class="text-center">ศิลปิน</th>
                                <th class="text-center">ลิงค์</th>
                                <!-- <th class="text-center">รูปภาพ</th> -->
                                <th class="text-center">รายละเอียด</th>
                                <!-- <th>user_id</th> -->
                                <!-- <th>position</th> -->
                                <!-- <th>type</th> -->
                                <!-- <th>status</th> -->
                                <!-- <th>updated_at</th> -->
                                <th class="text-center">เพิ่มเมื่อ</th>
                                <th class="text-center">ดำเนินการ</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $i = 1; ?>
<?php if (isset($youtube) && is_array($youtube)): ?>
<?php foreach ($youtube as $value): ?>
                            <tr>
                                <td class="text-center"><b><?php echo $i; ?></b></td>
                                <!-- <td><?php echo array_get($value, 'code', ''); ?></td> -->
                                <td><?php echo array_get($value, 'name', ''); ?></td>
                                <td><?php echo array_get($value, 'artist', ''); ?></td>
                                <td class="text-center">
                                    <a href="<?php echo array_get($value, 'url', ''); ?>" target="_blank">
                                        <img id="thumbnail_url" src="<?php echo array_get($value, 'image', ''); ?>" width="120" height="90" />
                                    </a>
                                </td>
                                <!-- <td class="text-center"><img id="thumbnail_url" src="<?php echo array_get($value, 'image', ''); ?>" width="120" height="90" /></td> -->
                                <td><?php echo array_get($value, 'description', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'user_id', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'position', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'type', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'status', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'updated_at', ''); ?></td> -->
                                <td class="text-center"><?php echo array_get($value, 'created_at', ''); ?></td>
                                <td class="text-center"><button onclick="window.location.href='<?php echo url('youtube/update') . '/' . array_get($value, 'id', '');?>'" type="button" class="btn btn-danger"> ลบเพลง </button></td>
                            </tr>
<?php   $i++; ?>
<?php endforeach; ?>
<?php endif; ?>
                        </tbody>
                    </table>
<?php if (!isset($youtube) || !is_array($youtube)): ?>
                    <div style="margin-top: 200px; text-align: center">
                        <button onclick="window.location.href='<?php echo url('youtube');?>'" type="button" class="btn btn-primary"> โหลดเพลงใหม่ </button>
                    </div>
<?php endif; ?>
                <?php   endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>