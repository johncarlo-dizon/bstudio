<?php
namespace App\Models\Components;
use CodeIgniter\Model;

class FormModel extends Model
{
    public function getForm($form)
    {
        $item = [
            // Basic Forms
            'basicForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We\'ll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            ',

            // Floating Forms
            'floatingForm' => '
            <form class="p-3">
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            ',

            // Horizontal Form
            'horizontalForm' => '
            <form class="p-3">
              <div class="row mb-3">
                <label for="formGroupExampleInput" class="col-sm-2 col-form-label">First Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your first name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="formGroupExampleInput2" class="col-sm-2 col-form-label">Last Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your last name">
                </div>
              </div>
              <div class="row mb-3">
                <label for="formGroupExampleInput3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Enter your email">
                </div>
              </div>
              <button type="submit" class="btn btn-warning">Submit</button>
            </form>
            ',

            // Inline Form
            'inlineForm' => '
            <form class="row g-3 p-3">
              <div class="col-md-6">
                <label for="inputName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="John">
              </div>
              <div class="col-md-6">
                <label for="inputLastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputLastname" placeholder="Doe">
              </div>
              <div class="col-md-12">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="example@example.com">
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
            ',

            // Form Validation
            'formValidation' => '
            <form class="row g-3 p-2">
  <div class="col-md-4">
    <label for="validationDefault01" class="form-label">First name</label>
    <input type="text" class="form-control" id="validationDefault01" value="Mark" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefault02" class="form-label">Last name</label>
    <input type="text" class="form-control" id="validationDefault02" value="Otto" required>
  </div>
  <div class="col-md-4">
    <label for="validationDefaultUsername" class="form-label">Username</label>
    <div class="input-group">
      <span class="input-group-text" id="inputGroupPrepend2">@</span>
      <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationDefault03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationDefault03" required>
  </div>
  <div class="col-md-3">
    <label for="validationDefault04" class="form-label">State</label>
    <select class="form-select" id="validationDefault04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="validationDefault05" class="form-label">Zip</label>
    <input type="text" class="form-control" id="validationDefault05" required>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
            ',

            // File Upload Form
            'fileUploadForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="formFile" class="form-label">Upload File</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              <button type="submit" class="btn btn-primary">Upload</button>
            </form>
            ',

            // Range Input Form
            'rangeInputForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="customRange1" class="form-label">Example range</label>
                <input type="range" class="form-range" id="customRange1">
              </div>
              <button type="submit" class="btn btn-info">Submit</button>
            </form>
            ',

            // Disabled Form
            'disabledForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="disabledInput" class="form-label">Disabled Input</label>
                <input type="text" id="disabledInput" class="form-control" placeholder="Disabled" disabled>
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled Select</label>
                <select id="disabledSelect" class="form-select" disabled>
                  <option>Disabled select</option>
                </select>
              </div>
              <button type="submit" class="btn btn-danger" disabled>Submit</button>
            </form>
            ',

            // Checkable Forms (Checkboxes, Radio Buttons)
            'checkableForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="flexCheckDefault" class="form-check-label">Default checkbox</label>
                <input class="form-check-input" type="checkbox" id="flexCheckDefault">
              </div>
              <div class="mb-3">
                <label for="flexRadioDefault1" class="form-check-label">Default radio</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
              </div>
              <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
            ',

            // Contact Form (Longer Form with Various Input Types)
            'contactForm' => '
           <form class="p-3">
              <div class="mb-3">
                <label for="contactName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="contactName" placeholder="John Doe">
              </div>
              <div class="mb-3">
                <label for="contactEmail" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="contactEmail" placeholder="you@example.com">
              </div>
              <div class="mb-3">
                <label for="contactMessage" class="form-label">Your Message</label>
                <textarea class="form-control" id="contactMessage" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
            ',

            // Newsletter Signup Form
            'newsletterForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="newsletterEmail" class="form-label">Email address</label>
                <input type="email" class="form-control" id="newsletterEmail" placeholder="name@example.com">
              </div>
              <div class="mb-3">
                <label for="newsletterName" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="newsletterName" placeholder="John Doe">
              </div>
              <button type="submit" class="btn btn-success">Subscribe</button>
            </form>
            ',

            // Address Form
            'addressForm' => '
            <form class="p-3">
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" placeholder="123 Main St, Apt 4B">
              </div>
              <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" placeholder="New York">
              </div>
              <div class="mb-3">
                <label for="zipcode" class="form-label">Zip Code</label>
                <input type="text" class="form-control" id="zipcode" placeholder="10001">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            '
        ];

        // Check if the provided $form exists in the $item array and return the corresponding value.
        return isset($item[$form]) ? $item[$form] : null;
    }
}
