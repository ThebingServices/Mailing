<?php

namespace FideloSoftware\Mailing\AutoConfig\Config;

class IncomingServer extends AbstractServer {
	
	const IMAP = 'imap';
	
	const POP3 = 'pop3';
	
	/**
	 * @param string $sHostname
	 * @param int $iPort
	 * @param string $sType
	 */
	public function __construct(string $sHostname, int $iPort, string $sType) {
		$this->sType = $sType;
		$this->sHostname = $sHostname;
		$this->iPort = $iPort;
	}
	
}

