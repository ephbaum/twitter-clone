<?php

namespace App\Listeners;

use App\Events\Twooted;
use App\Models\Tags;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class StoreHashtags
{

    const HASHTAG_REGEX = "(?<hashtags>#[a-zA-Z]\w+)";
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\Twooted  $event
     * @return void
     */
    public function handle(Twooted $event)
    {
        // match regular expression for #hashtag in $event->twoot->twoot_body
        if (preg_match_all('/'.self::HASHTAG_REGEX.'/', $event->twoot->twoot_body, $matches)) {
            // loop through all matches
            foreach ($matches['hashtags'] as $tag) {
                // strip octothorp from $tag
                $tag = substr($tag, 1);
                // check tags table for hashtag
                $tagModel = Tags::where('tag', $tag)->first();
                // if hashtag exists, get id
                if (!empty($tagModel)) {
                    $tagId = $tagModel->id;
                } else { // if hashtag new, add to tags table, get id
                    $newTagModel = new Tags();
                    $newTagModel->tag = $tag;
                    $newTagModel->save();
                    $tagId = $newTagModel->id;
                }
                // relate twoot with tag(s)
                $event->twoot->tags()->attach($tagId);
                $event->twoot->save();
            }
        }
    }
}
