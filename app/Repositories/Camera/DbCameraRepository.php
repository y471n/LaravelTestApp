<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 07/07/15
 * Time: 4:54 PM
 */

namespace Repositories\Camera;


use App\Camera;

class DbCameraRepository implements CameraRepositoryInterface{

    private function syncTags(Camera $camera, array $tags)
    {
        $camera->tags()->sync($tags);
    }

    public function selectAll()
    {
        return Camera::all();
    }

    public function findForSlug($slug)
    {
        return Camera::findBySlugOrFail($slug);
    }

    public function latest()
    {
        return Camera::latest()->launched()->get();
    }

    public function store($request)
    {
		$camera = Camera::create($request->all());
        $this->syncTags($camera, $request->input('tag_list'));
    }

    public function update($camera, $request)
    {
        $camera->update($request->all());
        $this->syncTags($camera, $request->input('tag_list'));
    }


}
