@props(['title', 'image'])
<div class="page-banner" style="background-image:url('{{ $image }}')">
    <div class="container">
        <h1>{{ $title }}</h1>
    </div>
</div>