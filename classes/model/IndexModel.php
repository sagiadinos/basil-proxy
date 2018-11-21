<?php
/*************************************************************************************
 * basil-proxy: A proxy solution for Digital Signage SMIL Player
 * Copyright (C) 2018 Nikolaos Saghiadinos <ns@smil-control.com>
 * This file is part of the basil-proxy source code
 *
 * This program is free software: you can redistribute it and/or  modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *************************************************************************************/

namespace Basil\model;

class IndexModel extends BaseFileModel
{
	/**
	 * @var string
	 */
	protected $player_index_path = '';

	public function __construct($path)
	{
		$this->player_index_path = $path;
		$this->createDirectoryIfNotExist($path);
	}

	/**
	 * @param $uuid
	 * @param $content
	 *
	 * @return $this
	 */
	public function saveIndex($uuid, $content)
	{
		$path = $this->player_index_path.'/'.$uuid.'.smil';
		$this->saveFile($path, $content);
		return $this;
	}

}