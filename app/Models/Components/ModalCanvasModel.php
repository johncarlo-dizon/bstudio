<?php
namespace App\Models\Components;
use CodeIgniter\Model;
 
class ModalCanvasModel extends Model
{
    public function getdata($param)
    {
      $item = [
        // Default Modal
        'default_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#defaultModal">
          Launch Default Modal
        </button>
        <div class="modal fade" id="defaultModal" tabindex="-1" aria-labelledby="defaultModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Default Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Centered Modal
        'centered_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centeredModal">
          Launch Centered Modal
        </button>
        <div class="modal fade" id="centeredModal" tabindex="-1" aria-labelledby="centeredModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="centeredModalLabel">Centered Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Scrollable Modal
        'scrollable_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#scrollableModal">
          Launch Scrollable Modal
        </button>
        <div class="modal fade" id="scrollableModal" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="scrollableModalLabel">Scrollable Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">Content that exceeds the viewport height will be scrollable...</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Static Backdrop Modal
        'static_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticModal">
          Launch Static Modal
        </button>
        <div class="modal fade" id="staticModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticModalLabel">Static Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">This modal does not close when clicking outside.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Fullscreen Modal
        'fullscreen_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fullscreenModal">
          Launch Fullscreen Modal
        </button>
        <div class="modal fade" id="fullscreenModal" tabindex="-1" aria-labelledby="fullscreenModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="fullscreenModalLabel">Fullscreen Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">This is a fullscreen modal.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Vertically Centered Scrollable Modal
        'centered_scrollable_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#centeredScrollableModal">
          Launch Centered Scrollable Modal
        </button>
        <div class="modal fade" id="centeredScrollableModal" tabindex="-1" aria-labelledby="centeredScrollableModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="centeredScrollableModalLabel">Centered Scrollable Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">This is a centered scrollable modal.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Large Modal
        'large_modal' => '
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal">
          Launch Large Modal
        </button>
        <div class="modal fade" id="largeModal" tabindex="-1" aria-labelledby="largeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">Large Modal</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">This is a large-sized modal.</div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
        ',
    
        // Off-Canvas Examples
        'default_offcanvas' => '
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#defaultOffcanvas" aria-controls="defaultOffcanvas">
          Launch Default Offcanvas
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="defaultOffcanvas" aria-labelledby="defaultOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="defaultOffcanvasLabel">Default Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">Default side offcanvas content.</div>
        </div>
        ',
    
        'right_offcanvas' => '
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas" aria-controls="rightOffcanvas">
          Launch Right Offcanvas
        </button>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="rightOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="rightOffcanvasLabel">Right Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">Offcanvas on the right side.</div>
        </div>
        ',
    
        'top_offcanvas' => '
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#topOffcanvas" aria-controls="topOffcanvas">
          Launch Top Offcanvas
        </button>
        <div class="offcanvas offcanvas-top" tabindex="-1" id="topOffcanvas" aria-labelledby="topOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="topOffcanvasLabel">Top Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">Offcanvas at the top.</div>
        </div>
        ',
    
        'bottom_offcanvas' => '
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#bottomOffcanvas" aria-controls="bottomOffcanvas">
          Launch Bottom Offcanvas
        </button>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="bottomOffcanvas" aria-labelledby="bottomOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="bottomOffcanvasLabel">Bottom Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">Offcanvas at the bottom.</div>
        </div>
        ',
    
        'fullscreen_offcanvas' => '
        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#fullscreenOffcanvas" aria-controls="fullscreenOffcanvas">
          Launch Fullscreen Offcanvas
        </button>
        <div class="offcanvas offcanvas-start" tabindex="-1" id="fullscreenOffcanvas" style="width: 100%;" aria-labelledby="fullscreenOffcanvasLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="fullscreenOffcanvasLabel">Fullscreen Offcanvas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">This is a fullscreen offcanvas.</div>
        </div>
        ',
    ];
    
    
        

        // Check if the provided $form exists in the $item array and return the corresponding value.
        return isset($item[$param]) ? $item[$param] : null;
    }
}
