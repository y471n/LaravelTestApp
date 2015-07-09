<?php

namespace App\Http\Controllers;

use App\Camera;
use App\Tag;
use App\Http\Requests;
use App\Http\Requests\CameraRequest;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use Repositories\Camera\CameraRepositoryInterface;
use Request;
use Carbon\Carbon;

class CamerasController extends Controller
{
//    protected $cameraRepositoryInterface;

	public function __construct(CameraRepositoryInterface $cameraRepositoryInterface)
	{
		$this->middleware('auth', ['only' => ['create', 'update', 'store', 'edit'] ]);
        $this->cameraRepositoryInterface = $cameraRepositoryInterface;
	}

	public function index()
	{
        $cameras = $this->cameraRepositoryInterface->latest();
		return view('cameras.index', compact('cameras'));
	}

	public function show(Camera $camera)
	{
		return view('cameras.show', compact('camera'));
	}

	public function create() 
	{
        $tags = Tag::lists('name', 'id');
		return view('cameras.create', compact('tags'));
	}

	public function store(CameraRequest $request)
	{
		$this->cameraRepositoryInterface->store($request);
		
        Flash::success('Your camera has been created! ');
		return redirect('cameras');
	}

	public function edit(Camera $camera)
	{
        $tags = Tag::lists('name', 'id');
		return view('cameras.edit', compact('camera', 'tags'));
	}

	public function update(CameraRequest $request, Camera $camera)
	{
        $this->cameraRepositoryInterface->update($camera, $request);
		return redirect('cameras');
	}
}
