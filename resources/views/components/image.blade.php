@props(['width' => '90'])

<img src="https://picsum.photos/{{ rand(1, 100) }}/{{ $width }}" alt="Company Logo" 
    class="rounded-xl border border-white/20 shadow-md" 
    style="width: <?php echo $width; ?>px; height: <?php echo $width; ?>px;">
