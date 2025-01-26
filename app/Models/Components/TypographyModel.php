<?php
namespace App\Models\Components;
use CodeIgniter\Model;

class TypographyModel extends Model
{
    public function getTypography($model)
    {
        $item = [
            // Basic Forms
            'lead' => '
            <p class="lead p-2">
                This is a lead paragraph. It stands out from regular paragraphs.
            </p>
            ',
        
            // Headings
            'headings' => '
            <h1>h1. Bootstrap heading</h1>
            <h2>h2. Bootstrap heading</h2>
            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
            ',
        
            // Display Headings
            'display_headings' => '
            <h1 class="display-1">Display 1</h1>
            <h1 class="display-2">Display 2</h1>
            <h1 class="display-3">Display 3</h1>
            <h1 class="display-4">Display 4</h1>
            <h1 class="display-5">Display 5</h1>
            <h1 class="display-6">Display 6</h1>
            ',
        
            // Inline Text Elements
            'inline_text' => '
            <p>You can use <mark>highlighted text</mark>, <del>deleted text</del>, 
            <s>strikethrough text</s>, <ins>inserted text</ins>, 
            <u>underlined text</u>, <small>small text</small>, 
            <strong>bold text</strong>, or <em>italic text</em>.</p>
            ',
        
            // Blockquotes
            'blockquotes' => '
          <blockquote class="blockquote p-2">
            <p>A well-known quote, contained in a blockquote element.</p>
            </blockquote>
            ',
        
            // Lists
            'lists' => '
            <ul>
                <li>Unordered list item</li>
                <li>Another item</li>
                <li>Yet another item</li>
            </ul>
            <ol>
                <li>Ordered list item</li>
                <li>Another item</li>
                <li>Yet another item</li>
            </ol>
            ',
        
            // Horizontal Rule
            'horizontal_rule' => '
            <hr>
            ',
        
            // Text Alignment
            'text_alignment' => '
            <p class="text-start">Left aligned text.</p>
            <p class="text-center">Center aligned text.</p>
            <p class="text-end">Right aligned text.</p>
            ',
        
            // Text Colors
            'text_colors' => '
            <p class="text-primary">Primary text</p>
            <p class="text-secondary">Secondary text</p>
            <p class="text-success">Success text</p>
            <p class="text-danger">Danger text</p>
            <p class="text-warning">Warning text</p>
            <p class="text-info">Info text</p>
            <p class="text-light bg-dark">Light text</p>
            <p class="text-dark">Dark text</p>
            <p class="text-muted">Muted text</p>
            <p class="text-white bg-dark">White text</p>
            ',
        
            // Display Properties
            'display_properties' => '
            <div class="d-inline">Inline element</div>
            <div class="d-block">Block element</div>
            <div class="d-flex justify-content-between">
                <span>Flex Item 1</span>
                <span>Flex Item 2</span>
            </div>
            ',
        ];
        

        // Check if the provided $form exists in the $item array and return the corresponding value.
        return isset($item[$model]) ? $item[$model] : null;
    }
}
