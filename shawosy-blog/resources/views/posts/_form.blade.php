



<div class="form-group">
   <div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Title</label>
     </div>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="title"   value="{{old('title')?old('title'):$title}}" placeholder="" />
    <div class="text text-danger" id="titleErro"></div>
    @if($errors->has('title'))
     <div class="text text-danger">{{ $errors->first('title') }}</div>
    @endif
     </div>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Description</label>
     </div>

    <div class="col-sm-10">
      <textarea name="body" id="body" rows="25" style="height:500, ">{{old('body')?old('body'):$body}}</textarea> 
    <div class="text text-danger" id="bodyErro"></div>
    @if($errors->has('body'))
     <div class="text text-danger">{{ $errors->first('body') }}</div>
    @endif
     </div>
</div>
</div>

<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Image</label>
     </div>

    <div class="col-sm-10">
      <input type="file" name="images"   />
    <div class="text text-danger" id="imagesErro"></div>
    @if($errors->has('images'))
     <div class="text text-danger">{{ $errors->first('images') }}</div>
    @endif
     </div>
</div>
</div>





<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Tags</label>
    </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="tags"   value="{{old('tags')?old('tags'):$tags}}" placeholder="" />
    <div class="text text-danger" id="tagsErro"></div>
    @if($errors->has('tags'))
     <div class="text text-danger">{{ $errors->first('tags') }}</div>
    @endif
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Focus Keywords</label>
    </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="keywords"   value="{{old('keywords')?old('keywords'):$keywords}}" placeholder="" />
    <div class="text text-danger" id="keywordsErro"></div>
    @if($errors->has('keywords'))
     <div class="text text-danger">{{ $errors->first('keywords') }}</div>
    @endif
     </div>
</div>
</div>
<div class="form-group">

<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Meta Tag</label>
 </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_tag"   value="{{old('meta_tag')?old('meta_tag'):$meta_tag}}" placeholder="" />
    <div class="text text-danger" id="meta_tagErro"></div>
    @if($errors->has('meta_tag'))
     <div class="text text-danger">{{ $errors->first('meta_tag') }}</div>
    @endif
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Meta Description</label>
 </div>

    <div class="col-sm-10">
      <input type="text" class="form-control" name="meta_description"   value="{{old('meta_description')?old('meta_description'):$meta_description}}" placeholder="" />
    <div class="text text-danger" id="meta_descriptionErro"></div>
    @if($errors->has('meta_description'))
     <div class="text text-danger">{{ $errors->first('meta_description') }}</div>
    @endif
     </div>
</div>
</div>
<div class="form-group">
<div class="col-sm-12">
    <div class="col-sm-2">
     <label class="pull-right-pro">Slug</label>
    </div>

     <div class="col-sm-10">
      <input type="text" class="form-control" name="slug"   value="{{old('slug')?old('slug'):$slug}}" placeholder="Enter Slug" />
    <div class="text text-danger" id="slugErro"></div>
    @if($errors->has('slug'))
     <div class="text text-danger">{{ $errors->first('slug') }}</div>
    @endif
     </div>
</div>
</div>

