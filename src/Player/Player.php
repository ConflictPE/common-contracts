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

namespace ConflictNetwork\Common\Contracts\Player;

use ConflictNetwork\Common\Contracts\Server\ServerId;

interface Player {

	/**
	 * Get the player id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Player\PlayerId
	 */
	public function getId() : PlayerId;

	/**
	 * Get the last known IP address.
	 *
	 * @return string
	 */
	public function getLastAddress() : string;

	/**
	 * Get the last server id.
	 *
	 * @return \ConflictNetwork\Common\Contracts\Server\ServerId
	 */
	public function getLastServerId() : ServerId;

}