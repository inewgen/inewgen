<div id="content">
    <div class="container">
        <div class="row sidebar-page">

            <div class="col-md-12 page-content">
                <!-- Search Widget -->
                <div class="widget widget-search">
                    <h3>Add new song</h3>
                    <form action="<?php url('youtube/add'); ?>" style="background-color: lightgray; padding: 10px;" method="post">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Youtube url <span style="color: red">*</span></label>
                        <input id="url" name="url" type="url" class="form-control" aria-describedby="emailHelp" placeholder="Enter youtube url">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Song name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Song name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Artist</label>
                        <input id="artist" name="artist" type="text" class="form-control" placeholder="Artist name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Image</label>
                        <input id="image" name="image" type="text" class="form-control" placeholder="Image url">
                        <img style="display: none;" id="thumbnail_url" src="" width="120" height="90" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Description</label>
                        <input id="description" name="description" type="text" class="form-control" placeholder="">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    <hr/>
                    <h3>Songs in queue (<a href="<?php echo url('youtube'); ?>">เล่นเพลง</a>)</h3>
                    <table id="example" border="1" style="border-color: lightgray;" class="display" cellspacing="0" width="100%">
                        <thead>
                            <tr style="background-color: lightgray">
                                <th>id</th>
                                <!-- <th>code</th> -->
                                <th>name</th>
                                <th>artist</th>
                                <th>url</th>
                                <th>image</th>
                                <th>description</th>
                                <!-- <th>user_id</th> -->
                                <th>position</th>
                                <!-- <th>type</th> -->
                                <!-- <th>status</th> -->
                                <!-- <th>updated_at</th> -->
                                <th>created_at</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <!-- <tfoot>
                            <tr>
                                <th>id</th>
                                <th>code</th>
                                <th>name</th>
                                <th>artist</th>
                                <th>url</th>
                                <th>description</th>
                                <th>user_id</th>
                                <th>position</th>
                                <th>type</th>
                                <th>status</th>
                                <th>updated_at</th>
                                <th>created_at</th>
                            </tr>
                        </tfoot> -->
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
                                <td><img id="thumbnail_url" src="<?php echo array_get($value, 'image', ''); ?>" width="120" height="90" /></td>
                                <td><?php echo array_get($value, 'description', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'user_id', ''); ?></td> -->
                                <td><?php echo array_get($value, 'position', ''); ?></td>
                                <!-- <td><?php echo array_get($value, 'type', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'status', ''); ?></td> -->
                                <!-- <td><?php echo array_get($value, 'updated_at', ''); ?></td> -->
                                <td><?php echo array_get($value, 'created_at', ''); ?></td>
                                <td><button onclick="window.location.href='<?php echo url('youtube/update') . '/' . array_get($value, 'id', '');?>'" type="button" class="btn btn-danger"> ลบเพลง </button></td>
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