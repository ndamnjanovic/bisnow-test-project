

<div class="col-md-8 col-md-offset-2">
    <h3>Submit new story</h3>

    <form role="form" method="post" action="/add-story">
      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter story title">
      </div>
      @if ($errors->first('title'))
          <div class="alert alert-danger">
             <?php echo $errors->first('title'); ?>
          </div>
      @endif
      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" id="content" name="content" placeholder="Enter story content"></textarea>
      </div>
      @if ($errors->first('content'))
          <div class="alert alert-danger">
            <?php echo $errors->first('content'); ?>
          </div>
      @endif
      <div class="form-group">
        <label for="type">Type</label>
        <select class="form-control" id="type" name="storyType">
            <option> Attribute </option>
            <option> Quote </option>
        </select>
       </div>
       <div class="form-group">
            <label for="storyTypeValue">Type Value</label>
            <input type="text" class="form-control" id="typeValue" name="storyTypeValue" placeholder="Enter type value">
       </div>
        @if ($errors->first('value'))
            <div class="alert alert-danger">
              <?php echo $errors->first('value'); ?>
            </div>
        @endif

      <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>