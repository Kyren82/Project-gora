wp.blocks.registerBlockVariation('core/paragraph', {
    name: 'custom-paragraph',
    title: 'custom paragraph', 
    description: 'Akapit ze specjalną klasą stylującą.',
    category: 'Custom-blocks', 
    icon: 'editor-quote', 
    attributes: {
        className: 'custom-p', 
        placeholder: 'Wpisz tutaj swój specjalny tekst...'
    }
});