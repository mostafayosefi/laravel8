
@foreach($textdeses as $key => $textdese)
@if($textdese->id==$id)


<div class="elementor-element elementor-element-5cbd3b3 elementor-widget elementor-widget-rt-heading"
data-id="5cbd3b3" data-element_type="widget"
data-widget_type="rt-heading.default">
<div class="elementor-widget-container">
    <div class="rt-heading-wrapper text-center">
        @php echo $textdese->text; @endphp
    </div>
</div>
</div>


            @endif
            @endforeach
