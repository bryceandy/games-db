<script>
    @if ($event) window.livewire.on('gameWithRatingAdded', (params) => { @endif

        @if ($event)
            var container = document.getElementById(params.id);
        @else
            var container = document.getElementById('{{ $id }}');
        @endif

    var bar = new ProgressBar.Circle(container, {
        color: '#fff',
        strokeWidth: 6,
        trailWidth: 3,
        trailColor: '#4a5568',
        easing: 'easeInOut',
        duration: 2500,
        text: {
            autoStyleContainer: false
        },
        from: { color: '#48bb78', width: 6 },
        to: { color: '#48bb78', width: 6 },
        step: function(state, circle) {
            circle.path.setAttribute('stroke', state.color);
            circle.path.setAttribute('stroke-width', state.width);

            const value = Math.round(circle.value() * 100);

            value === 0 ? circle.setText('0%') : circle.setText(`${value}%`);
        }
    });

        @if ($event)
            bar.animate(params.rating / 100);
        @else
            bar.animate({{ (float) $rating / 100 }});
        @endif

    @if ($event) }) @endif
</script>
