<?php
namespace App\Models\Components;
use CodeIgniter\Model;
 
class BadgeButtonModel extends Model
{
    public function getBadgeButton($badgebtn)
    {
      $item = [
        // Badges
        'badge_heading' => '
        <h1>Example heading <span class="badge bg-secondary">New</span></h1>
        <h2>Example heading <span class="badge bg-secondary">New</span></h2>
        <h3>Example heading <span class="badge bg-secondary">New</span></h3>
        <h4>Example heading <span class="badge bg-secondary">New</span></h4>
        <h5>Example heading <span class="badge bg-secondary">New</span></h5>
        <h6>Example heading <span class="badge bg-secondary">New</span></h6>
        ',
        
        'badge_button' => '
        <button type="button" class="btn btn-primary">
        Notifications <span class="badge bg-secondary">4</span>
        </button>
        ',

        'badge_position' => '
        <button type="button" class="btn btn-primary position-relative m-3">
        Inbox
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            99+
            <span class="visually-hidden">unread messages</span>
        </span>
        </button>
        <button type="button" class="btn btn-primary m-3 position-relative">
        Profile
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button>
        ',

        'badge_default' => '
            <span class="badge bg-primary">Primary</span>
            <span class="badge bg-secondary">Secondary</span>
            <span class="badge bg-success">Success</span>
            <span class="badge bg-danger">Danger</span>
            <span class="badge bg-warning text-dark">Warning</span>
            <span class="badge bg-info">Info</span>
            <span class="badge bg-light text-dark">Light</span>
            <span class="badge bg-dark">Dark</span>
        ',
        'badge_pill' => '
            <span class="badge rounded-pill bg-primary">Pill Primary</span>
            <span class="badge rounded-pill bg-secondary">Pill Secondary</span>
            <span class="badge rounded-pill bg-success">Pill Success</span>
            <span class="badge rounded-pill bg-danger">Pill Danger</span>
            <span class="badge rounded-pill bg-warning text-dark">Pill Warning</span>
            <span class="badge rounded-pill bg-info">Pill Info</span>
            <span class="badge rounded-pill bg-light text-dark">Pill Light</span>
            <span class="badge rounded-pill bg-dark">Pill Dark</span>
        ',
    
        // Buttons
        'button_default' => '
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>
            <button type="button" class="btn btn-link">Link</button>
        ',
        'button_outline' => '
            <button type="button" class="btn btn-outline-primary">Outline Primary</button>
            <button type="button" class="btn btn-outline-secondary">Outline Secondary</button>
            <button type="button" class="btn btn-outline-success">Outline Success</button>
            <button type="button" class="btn btn-outline-danger">Outline Danger</button>
            <button type="button" class="btn btn-outline-warning">Outline Warning</button>
            <button type="button" class="btn btn-outline-info">Outline Info</button>
            <button type="button" class="btn btn-outline-light">Outline Light</button>
            <button type="button" class="btn btn-outline-dark">Outline Dark</button>
        ',
    
        // Button Groups
        'button_group_horizontal' => '
            <div class="btn-group" role="group" aria-label="Horizontal Button Group">
                <button type="button" class="btn btn-primary">Left</button>
                <button type="button" class="btn btn-primary">Middle</button>
                <button type="button" class="btn btn-primary">Right</button>
            </div>
        ',
        'button_group_vertical' => '
            <div class="btn-group-vertical" role="group" aria-label="Vertical Button Group">
                <button type="button" class="btn btn-secondary">Top</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Bottom</button>
            </div>
        ',
    
        // Close Buttons
        'close_button_default' => '
            <button type="button" class="btn-close" aria-label="Close"></button>
        ',
        'close_button_white' => '
           <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
           <button type="button" class="btn-close btn-close-white" disabled aria-label="Close"></button>
        ',
    
        // Dropdowns
        'dropdown_default' => '
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    Default Dropdown
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        ',
        'dropdown_split' => '
            <div class="btn-group">
                <button type="button" class="btn btn-primary">Primary</button>
                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        ',
        'dropdown_directions' => '
            <div class="btn-group dropend">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropend
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
            <div class="btn-group dropup">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropup
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </div>
        ',
    ];
    
        

        // Check if the provided $form exists in the $item array and return the corresponding value.
        return isset($item[$badgebtn]) ? $item[$badgebtn] : null;
    }
}
