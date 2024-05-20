<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextWidget extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = \App\Models\Category::query()
            ->leftJoin('category_posts', 'categories.id', '=', 'category_posts.category_id')
            ->select('categories.title', 'categories.slug', \DB::raw('count(*) as total'))
            ->groupBy('categories.id')
            ->orderByDesc('total')
            ->limit(10)
            ->get();

        return view('components.text-widget', compact('categories'));
    }
}
