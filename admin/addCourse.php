             <form method="POST" action="./controller/createCourse.php" class="card p-4" enctype="multipart/form-data">
                 <h3 class="text-center text-success">Add a course</h3>
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Course title</label>
                     <input type="text" name="title" class="form-control mb-3" id="title" placeholder="Course title">
                     <div class="mb-3">
                         <label for="exampleFormControlTextarea1 " class="form-label">Course Description</label>
                         <textarea class="form-control" id="description" name="description" placeholder="Course Description" rows="4"></textarea>
                     </div>
                     <div class="mb-3">
                         <label for="exampleFormControlTextarea1" class="form-label">Course Requirements</label>
                         <textarea class="form-control " name="requirements" placeholder="Requirements.." id="description" rows="3"></textarea>
                     </div>
                     <label for="exampleFormControlInput1" class="form-label">Course Image</label>
                     <input class="form-control  mb-3" type="file" name="image" id="formFileMultiple" multiple accept="image/*">
                     <label for="exampleFormControlInput1" class="form-label">Course Video</label>
                     <input class="form-control  mb-3" name="courseVideo" type="file" id="formFileMultiple" multiple accept="video/*">
                     <label for="exampleFormControlInput1" class="form-label">Course PDF</label>
                     <input class="form-control  mb-3" name="coursePdf" type="file" id="formFileMultiple" multiple accept="document/*">
                     <label for="exampleFormControlInput1" class="form-label">Course Price</label>
                     <input class="form-control  mb-3" name="price" placeholder="Course price" type="text"  required>
                 </div>
                 <select class="form-select form-control mb-3" name="category" aria-label="Default select example">
                     <option selected>Choose a category</option>
                     <option value="Programming">Programming</option>
                     <option value="Marketing">Marketing</option>
                     <option value="Photography">Photography</option>
                     <option value="Music">Music</option>
                     <option value="Business">Business</option>
                     <option value="Graphics Design">Graphics Design</option>
                     
                 </select>
                 <button type="submit" class="btn btn-success btn-lg" name="submit">Add course</button>
             </form>