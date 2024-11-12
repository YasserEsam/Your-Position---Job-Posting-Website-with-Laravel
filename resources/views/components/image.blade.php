@props(['width' => '90', 'employer'])

<img src="{{asset($employer->logo)}}" alt="Company Logo" 
    class="rounded-xl border border-white/20 shadow-md" 
    style="width: <?php echo $width; ?>px; height: <?php echo $width; ?>px;">
