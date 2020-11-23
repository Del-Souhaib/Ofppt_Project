<?php

echo '
<div  class="row ">
   <div class="col-12 mb-5">
      <h2 class="bigtitle">Add products</h2>
   </div>
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="name">Product name</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <input type="text" placeholder="Enter product  name" required name="name" class="form-control" id="name">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="pet">Product Pet</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <select name="pet" class="form-control">
         <option value="Dogs">Dogs</option>
         <option value="Cats">Cats</option>
         <option value="Birds">Birds</option>
         <option value="Fishes">Fishes</option>
         <option value="Hmasters">Hmasters</option>
         <option value="Horses">Horses</option>
         <option value="Other">Other</option>
      </select>
   </div>
   <div class="col-lg-1"></div>
</div>
<div  class="row mb-5">
   <div class="col-lg-1 ">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="category">Prodcut Category</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <select name="category" class="form-control">
         <option value="food">Food</option>
         <option value="beds">Beds</option>
         <option value="Toys">Toys</option>
         <option value="Bowls">Bowls</option>
         <option value="Hmasters">Kennels</option>
         <option value="Horses">Glass bowl</option>
         <option value="Other">Other</option>
      </select>
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="colors">Product Colors</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="text" name="colors" placeholder="Red,Black,Green" class="form-control" id="colors">
   </div>
   <div class="col-lg-1 ">
   </div>
</div>
<div  class="row mb-5">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="price">Price</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="text" name="price" required placeholder="Enter product price" class="form-control" id="price">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="images">Product images</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <input type="file" name="images" class="form-control-file"   required id="images">
   </div>
   <div class="col-lg-1">
   </div>
</div>
<div  class="row mb-5">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="Specification">Specification</label>
   </div>
   <div class="col-lg-3 col-md-6 mb-5">
      <textarea name="Specification" required placeholder="Write product Specification" class="form-control" id="Specification"></textarea>
   </div>
   <div class="col-lg-2 col-md-4">
      <label for="words">Specific words</label>
   </div>
   <div class="col-lg-3 col-md-6">
      <textarea  name="words" required placeholder="Write that client can reach th product" class="form-control"id="words"></textarea>
   </div>
   <div class=" col-lg-1">
   </div>
</form>
<div   class="row">
   <div class="col-lg-1">
   </div>
   <div class="col-lg-2 col-md-4">
      <button class="btn btn-primary" name="addproduct" id="addproduct" >Add product</button><br><br>
   </div>
   <div class="col-lg-1">
   </div>
</div>
<div class="row">
   <div class="col-1"></div>
</div>';
