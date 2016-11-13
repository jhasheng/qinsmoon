<?php namespace App\Repositories;

use App\Models\Auctions;
use Bosnadev\Repositories\Eloquent\Repository;

class AuctionsRepository extends Repository {

	public function model()
	{
		return Auctions::class;
	}

}