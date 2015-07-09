<?php
/**
 * Created by PhpStorm.
 * User: mac
 * Date: 07/07/15
 * Time: 4:53 PM
 */

namespace Repositories\Camera;


interface CameraRepositoryInterface {


    public function selectAll();

    public function findForSlug($slug);

    public function latest();

    public function store($request);

    public function update($camera, $request);

}