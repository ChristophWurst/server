<?php

namespace OCP\AppFramework\Http;

use OCP\AppFramework\Http;
use OCP\Files\File;

/**
 * Class FileDisplayResponse
 *
 * @package OCP\AppFramework\Http
 * @since 9.2.0
 */
class FileDisplayResponse extends Response implements ICallbackResponse {

	/** @var File */
	private $file;

	/**
	 * FileDisplayResponse constructor.
	 *
	 * @param File $file
	 * @param int $statusCode
	 * @param array $headers
	 * @since 9.2.0
	 */
	public function __construct(File $file, $statusCode=Http::STATUS_OK,
								$headers=[]) {
		$this->file = $file;
		$this->setStatus($statusCode);
		$this->setHeaders(array_merge($this->getHeaders(), $headers));
		$this->addHeader('Content-Disposition', 'inline; filename=""');

		$this->setETag($file->getEtag());
		$lastModified = new \DateTime();
		$lastModified->setTimestamp($file->getMTime());
		$this->setLastModified($lastModified);
	}

	/**
	 * @param IOutput $output
	 * @since 9.2.0
	 */
	public function callback(IOutput $output) {
		if ($output->getHttpResponseCode() !== Http::STATUS_NOT_MODIFIED) {
			$output->setOutput($this->file->getContent());
		}
	}
}
