{{-- Testimonial Card Component --}}
{{-- Usage: @include('partials.testimonial-card', ['testimonial' => $testimonial]) --}}

<div class="testimonial-card {{ $class ?? '' }}" data-testimonial-id="{{ $testimonial->id }}">
    <div class="testimonial-card-body">
        @if($testimonial->image)
        <div class="testimonial-image-wrapper">
            <img src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}" class="testimonial-image">
            @if($testimonial->youtube_video_link)
            <div class="testimonial-video-overlay">
                <button class="testimonial-play-btn" onclick="openTestimonialVideo('{{ $testimonial->youtube_video_link }}')" type="button">
                    <i class="fab fa-youtube"></i>
                    <span>Watch Video</span>
                </button>
            </div>
            @endif
        </div>
        @elseif($testimonial->youtube_video_link)
        <div class="testimonial-video-thumbnail" onclick="openTestimonialVideo('{{ $testimonial->youtube_video_link }}')" style="cursor: pointer;">
            <div class="testimonial-video-placeholder">
                <i class="fab fa-youtube"></i>
                <span>Click to Watch Video</span>
            </div>
        </div>
        @endif
        
        <div class="testimonial-content">
            <div class="testimonial-rating">
                @for($i = 1; $i <= 5; $i++)
                    <i class="fas fa-star {{ $i <= $testimonial->rating ? 'active' : '' }}"></i>
                @endfor
            </div>
            
            <p class="testimonial-text">{!! $testimonial->testimonial !!}</p>
            
            <div class="testimonial-author">
                <h6 class="testimonial-name">{{ $testimonial->name }}</h6>
                @if($testimonial->position || $testimonial->company)
                <p class="testimonial-meta">
                    @if($testimonial->position){{ $testimonial->position }}@endif
                    @if($testimonial->position && $testimonial->company), @endif
                    @if($testimonial->company){{ $testimonial->company }}@endif
                </p>
                @endif
            </div>
            
            @if($testimonial->youtube_video_link && !$testimonial->image)
            <button class="btn btn-primary btn-sm mt-2" onclick="openTestimonialVideo('{{ $testimonial->youtube_video_link }}')" type="button">
                <i class="fab fa-youtube me-1"></i> Watch Video Testimonial
            </button>
            @endif
        </div>
    </div>
</div>

<style>
.testimonial-card {
    background: white;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.15);
}

.testimonial-image-wrapper {
    position: relative;
    width: 100%;
    height: 200px;
    overflow: hidden;
}

.testimonial-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.testimonial-video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.testimonial-image-wrapper:hover .testimonial-video-overlay {
    opacity: 1;
}

.testimonial-play-btn {
    background: #FF0000;
    color: white;
    border: none;
    padding: 12px 24px;
    border-radius: 30px;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.testimonial-play-btn:hover {
    transform: scale(1.1);
}

.testimonial-play-btn i {
    font-size: 1.5rem;
}

.testimonial-video-thumbnail {
    width: 100%;
    height: 200px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.testimonial-video-thumbnail:hover {
    transform: scale(1.02);
}

.testimonial-video-placeholder {
    color: white;
    text-align: center;
}

.testimonial-video-placeholder i {
    font-size: 3rem;
    margin-bottom: 10px;
    display: block;
}

.testimonial-content {
    padding: 20px;
}

.testimonial-rating {
    margin-bottom: 15px;
}

.testimonial-rating .fa-star {
    color: #ddd;
    font-size: 0.9rem;
}

.testimonial-rating .fa-star.active {
    color: #ffc107;
}

.testimonial-text {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
    font-size: 0.95rem;
}

.testimonial-author {
    border-top: 1px solid #eee;
    padding-top: 15px;
}

.testimonial-name {
    font-weight: 600;
    color: #333;
    margin-bottom: 5px;
}

.testimonial-meta {
    color: #999;
    font-size: 0.85rem;
    margin: 0;
}
</style>

