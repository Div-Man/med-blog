<?php 
    function tree2($comments, $parent_id = 0, $level = 0) {
        foreach ($comments as $comment) {
            if ($comment['parent_id'] == $parent_id) {
                echo str_repeat('---', $level) . '- ' . $comment['text'] . "<br>";
                tree2($comments, $comment['id'], $level + 1);
            }
        }
    }
    
    tree2($comments);
?>




<?php 
    function tree($comments, $parent_id = 0, $level = 0) {
      foreach($comments as $comment): ?>     
        <div class="single-comment">
          <div class="author-wrap">
              <div class="author-pic">
                  <a href="#/"><img src="{{ asset('/img/blog/author10.png')}}" alt="Image-HasTech"></a>
              </div>
              <div class="author-info">
                  <h4 class="title"><a href="team.html">Morgon Dawson</a></h4>
                  <p><?php echo $comment['text']; ?></p>
                  <div class="author-info-footer">
                      <a class="comment-reply" href="#/">Reply</a>
                      <a class="comment-likes" href="#/"><span>35</span> Likes</a>
                  </div>
                  <a class="comment-date" href="#">20 April, 2021</a>
              </div>
          </div>
      </div>
    <?php  if($comment['parent_id'] == $parent_id):?>
        <div class="single-comment reply-comment">
            <div class="author-wrap">
                <div class="author-pic">
                    <a href="#/"><img src="{{ asset('/img/blog/author11.png')}}" alt="Image-HasTech"></a>
                </div>
                <div class="author-info">
                    <h4 class="title"><a href="team.html">Alex Stuart</a></h4>
                    <p><?php echo $comment['text']; ?></p>
                    <div class="author-info-footer">
                        <a class="comment-reply" href="#/">Reply</a>
                        <a class="comment-likes" href="#/"><span>10</span> Likes</a>
                    </div>
                    <a class="comment-date" href="#">19 April, 2021</a>
                </div>
            </div>
        </div>
    <?php tree($comments, $comment['id'], $level + 1);?>
  <?php endif;?> 
  <?php endforeach;?> 
   
<?php } 

tree($comments);

?>


