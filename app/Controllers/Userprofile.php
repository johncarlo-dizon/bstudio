<?php
namespace App\Controllers;

class Userprofile extends BaseController
{
    public $session;

    public function __construct(){
        $this->session = session();
    }

    public function uploadImage()
    {
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'userimage' => [
                    'rules' => 'uploaded[userimage]|is_image[userimage]|max_size[userimage,2048]',
                    'errors' => [
                        'uploaded' => 'Please upload an image file.',
                        'is_image' => 'The file must be a valid image.',
                        'max_size' => 'Image size cannot exceed 2MB.',
                    ]
                ]
            ];
    
            if ($this->validate($rules)) {
                $userId = $this->request->getVar('userimage_userid');
                $userimage = $this->request->getFile('userimage');
    
                if ($userimage->isValid() && !$userimage->hasMoved()) {
                    $newFileName = $userimage->getRandomName();  
                    $userimage->move('./uploads', $newFileName);  
                    
              
                    $data = ['profile_pic' => $newFileName];
                    $db = \Config\Database::connect();
                    $db->table('users')->set($data)->where('userid', $userId)->update();
                    
       
                    $this->session->setTempdata('message', 'Profile image updated successfully.', 3);
                    return redirect()->to('/dashboard');
                } else {
                    $this->session->setTempdata('message', 'There was an error uploading your file.', 3);
                    return redirect()->back();
                }
            } else {
                $validationErrors = $this->validator->getErrors();
                $this->session->setTempdata('message', $validationErrors, 3);
                return redirect()->to("/dashboard");
            }
        }
    
        return redirect()->to("/dashboard");
    }
    

    public function changeusername()
    {
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'username' => [
                    'rules' => 'required|min_length[3]|max_length[20]|is_unique[users.username]',
                    'errors' => [
                        'required' => 'Username is required.',
                        'min_length' => 'Username must be at least 3 characters long.',
                        'max_length' => 'Username must not exceed 20 characters.',
                        'is_unique' => 'Username already exists.',
                    ]
                ]
            ];

            if ($this->validate($rules)) {
                $userId = $this->request->getVar('user_userid');
                $newUsername = $this->request->getVar('username');

                $db = \Config\Database::connect();
                $data = ['username' => $newUsername];
                $db->table('users')->set($data)->where('userid', $userId)->update();

                $this->session->setTempdata('message', 'Your username was successfully updated.', 3);
                return redirect()->to('/dashboard');
            } else {
                $validationErrors = $this->validator->getErrors();
                $this->session->setTempdata('message', $validationErrors, 3);
                return redirect()->to("/dashboard");
            }
        }
    }

    public function changepassword()
    {
        if ($this->request->getMethod() == 'POST') {
            $rules = [
                'oldPassword' => 'required|min_length[6]',
                'newPassword' => 'required|min_length[6]',
                'confirmPassword' => 'required|matches[newPassword]',
            ];

            if ($this->validate($rules)) {
                $userId = $this->request->getVar('changepass_userid');
                $oldPassword = $this->request->getVar('oldPassword');
                $newPassword = $this->request->getVar('newPassword');
                $confirmPassword = $this->request->getVar('confirmPassword');

                // Assuming you are checking the old password in your logic
                $db = \Config\Database::connect();
                $user = $db->table('users')->where('userid', $userId)->get()->getRow();
                
                if (password_verify($oldPassword, $user->password)) {
                    $newPasswordHash = password_hash($newPassword, PASSWORD_BCRYPT);
                    $data = ['password' => $newPasswordHash];
                    $db->table('users')->set($data)->where('userid', $userId)->update();
                    $this->session->setTempdata('message', 'Your password was successfully updated.', 3);
                    return redirect()->to('/dashboard');
                } else {
                    $this->session->setTempdata('message', 'Old password is incorrect.', 3);
                    return redirect()->back();
                }
            } else {
                $validationErrors = $this->validator->getErrors();
                $this->session->setTempdata('message', $validationErrors, 3);
                return redirect()->to("/dashboard");
            }
        }
    }

    public function savetemplate(){
       echo $this->request->getVar("textContent");
       echo  $this->request->getVar("contentuserid");
       echo $this->request->getVar("templatename");
    }
}
