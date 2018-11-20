<?php

/**
 *     ___                 __  _  _        _      ___    __
 *    / __\  ___   _ __   / _|| |(_)  ___ | |_   / _ \  /__\
 *   / /    / _ \ | '_ \ | |_ | || | / __|| __| / /_)/ /_\
 *  / /___ | (_) || | | ||  _|| || || (__ | |_ / ___/ //__
 *  \____/  \___/ |_| |_||_|  |_||_| \___| \__|\/     \__/
 *
 *
 *  Copyright (C) 2018 Conflict Network.
 *
 *  This is private software, you cannot redistribute and/or modify it in any way
 *  unless given explicit permission to do so. If you have not been given explicit
 *  permission to view or modify this software you should take the appropriate actions
 *  to remove this software from your device immediately.
 *
 * @author Jack Noordhuis
 *
 *
 */

declare(strict_types=1);

namespace ConflictNetwork\Common\Contracts\Game;

interface Game {

	/**
	 * Get the game id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Game\GameId
	 */
	public function getId() : GameId;

	/**
	 * Get the game type.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Game\GameType
	 */
	public function getType() : GameType;

	/**
	 * Get the total online player count for this game.
	 *
	 * @return int
	 */
	public function getOnline() : int;

	/**
	 * Get the total max player slots for this game.
	 *
	 * @return int
	 */
	public function getMax() : int;

}