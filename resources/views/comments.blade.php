<?php

function tree($comments, $parent_id = 0, $level = 0) {
    foreach ($comments as $comment):
        ?>     
        <?php if ($comment['parent_id'] == $parent_id): ?>
            <div class="single-comment" <?php if ($parent_id != 0) echo 'style="padding-left: ' . ($level * 80) . 'px"'; ?>>
                <div class="author-wrap">
                    <div class="author-pic">
                        <a href="#/"><img src="{{ asset('/img/blog/author11.png')}}" alt="Image-HasTech"></a>
                    </div>
                    <div class="author-info">
                        <h4 class="title">{{$comment['commenter_name']}}</h4>
                        <p>{{$comment['text']}}</p>
                        <div class="author-info-footer">
                            <a class="comment-reply" onclick="showCommentReply(this); return false;"href="#/">Ответить</a>
                            
                        </div>
                       
                        <a class="comment-date" href="#">{{ Carbon\Carbon::parse($comment['created_at'])->format('d.m.Y')}}</a>
                    </div>
                </div>
                       <div class="comment-form-area">
                
                  <div class="comment-form-content">
                    <form method="post" action="/store-comment">
                        {{csrf_field()}} 
                       <input name="post_id" type="hidden" value="<?php echo $comment['post_id']; ?>">
                       <input name="parent_id" type="hidden" value="<?php echo $comment['id']; ?>">
                      <div class="row row-gutter-23" style="display: none; margin: 0; margin-left: 196.5px; margin-top: 30px;">
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <textarea class="form-control" name="text"  style="height: 150px" placeholder="Ответить на комментарий"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group mb--0">
                            <button type="submit" class="btn-submit">Отправить</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
            <?php tree($comments, $comment['id'], $level + 1); ?>
        <?php endif; ?> 
    <?php endforeach; ?> 

    <?php
}

tree($comments);
?>

<script>
    function showCommentReply(target){
        let parent = target.closest('.single-comment');
        let commentReply = parent.querySelector('.row-gutter-23');
        commentReply.style.setProperty('display', 'block');
    }
</script>


