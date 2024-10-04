<div>

    <input wire:model="search" type="text" placeholder="Search categories..."/>

 

    <ul>

        @foreach($categories as $category)

            <li>{{ $category->name }}</li>

        @endforeach

    </ul>

</div>