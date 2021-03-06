<?php
namespace Training\S1v2\Model\Sample;

use Magento\Framework\Config\Reader\Filesystem;
use Magento\Framework\Config\FileResolverInterface;
use Magento\Framework\Config\ConverterInterface;
use Training\S1v2\Model\Sample\SchemaLocator;
use Magento\Framework\Config\ValidationStateInterface;

class Reader extends Filesystem
{
    protected $_idAttributes = [
        '/table/row' => 'id',
        '/table/row/column' => 'id',
    ];

    /**
     * @param FileResolverInterface $fileResolver
     * @param ConverterInterface $converter
     * @param SchemaLocator $schemaLocator
     * @param ValidationStateInterface $validationState
     * @param string $fileName
     * @param array $idAttributes
     * @param string $domDocumentClass
     * @param string $defaultScope
     */
    public function __construct(
        FileResolverInterface $fileResolver,
        ConverterInterface $converter,
        SchemaLocator $schemaLocator,
        ValidationStateInterface $validationState,
        $fileName = 'sample.xml',
        $idAttributes = [],
        $domDocumentClass = 'Magento\Framework\Config\Dom',
        $defaultScope = 'global'
    ) {
        parent::__construct(
            $fileResolver,
            $converter,
            $schemaLocator,
            $validationState,
            $fileName,
            $idAttributes,
            $domDocumentClass,
            $defaultScope
        );
    }
}