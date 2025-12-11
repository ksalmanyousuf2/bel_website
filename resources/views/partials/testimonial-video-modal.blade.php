<!-- Testimonial Video Modal -->
<div class="modal fade" id="testimonialVideoModal" tabindex="-1" aria-labelledby="testimonialVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="testimonialVideoModalLabel">Testimonial Video</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="ratio ratio-16x9">
                    <iframe id="testimonialVideoFrame" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('testimonialVideoModal');
    const videoFrame = document.getElementById('testimonialVideoFrame');
    
    if (modal) {
        // Clear video when modal is hidden
        modal.addEventListener('hidden.bs.modal', function() {
            if (videoFrame) {
                videoFrame.src = '';
            }
        });
    }
    
    // Function to open video modal
    window.openTestimonialVideo = function(videoUrl) {
        if (!videoUrl) return;
        
        // Extract video ID from URL
        const videoId = extractYouTubeVideoId(videoUrl);
        if (!videoId) {
            alert('Invalid YouTube URL');
            return;
        }
        
        // Set embed URL
        const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        
        if (videoFrame && modal) {
            videoFrame.src = embedUrl;
            const bsModal = new bootstrap.Modal(modal);
            bsModal.show();
        }
    };
    
    // Function to extract YouTube video ID
    function extractYouTubeVideoId(url) {
        const regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|&v=)([^#&?]*).*/;
        const match = url.match(regExp);
        return (match && match[2].length === 11) ? match[2] : null;
    }
});
</script>

