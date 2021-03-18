Sharect WP

The plugin allows you to highlight text on your website and share it on social networks. The plugin is being developed. The plans include adding a page for setting social networks and custom buttons.

But now you can use this snippets in functions.php:

Config:

    function change_sharect_config() {
        return "
    		facebook: true,
    		twitter: true,
    		twitterUsername: 'estevanmaito',
    		backgroundColor: '#667EEA',
    		iconColor: '#FFF',
    		selectableElements: ['p'],
    	";
    }

    add_filter( 'wpsharect_config_filter', 'change_sharect_config' );

Custom Icons:

    function add_sharect_icons() {
        return '
    		{
    			icon: `<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 478.165 478.165"><path d="M478.165 232.946c0 128.567-105.057 232.966-234.679 232.966-41.102 0-79.814-10.599-113.445-28.969L0 478.165l42.437-125.04c-21.438-35.065-33.77-76.207-33.77-120.159C8.667 104.34 113.763 0 243.485 0c129.623 0 234.68 104.34 234.68 232.946zM243.485 37.098c-108.802 0-197.422 87.803-197.422 195.868 0 42.915 13.986 82.603 37.576 114.879l-24.586 72.542 75.849-23.968c31.121 20.481 68.457 32.296 108.583 32.296 108.723 0 197.323-87.843 197.323-195.908 0-107.886-88.6-195.709-197.323-195.709zM361.931 286.62c-1.395-2.331-5.22-3.746-10.898-6.814-5.917-2.849-34.089-16.497-39.508-18.37-5.16-1.913-8.986-2.849-12.811 2.829-4.005 5.638-14.903 18.629-18.23 22.354-3.546 3.785-6.854 4.264-12.552 1.435-5.618-2.809-24.267-8.866-46.203-28.391-17.055-15.042-28.67-33.711-31.997-39.508-3.427-5.758-.398-8.826 2.471-11.635 2.69-2.59 5.778-6.734 8.627-10.041 2.969-3.287 3.905-5.638 5.798-9.424 1.913-3.905.936-7.192-.478-10.141-1.415-2.849-13.01-30.881-17.752-42.337-4.841-11.416-9.543-9.523-12.871-9.523-3.467 0-7.212-.478-11.117-.478-3.785 0-10.041 1.395-15.381 7.192-5.2 5.658-20.123 19.465-20.123 47.597 0 28.052 20.601 55.308 23.55 59.053 2.869 3.785 39.747 63.197 98.303 86.07 58.476 22.872 58.476 15.321 69.115 14.365 10.38-.956 34.069-13.867 38.811-27.096 4.66-13.45 4.66-24.766 3.246-27.137z"/></svg>`,
    			url: `https://api.whatsapp.com/send?text=TEXT_SELECTION%20PAGE_URL`
    		}
    	';
    }

    add_filter( 'wpsharect_appendCustomShareButtons_filter', 'add_sharect_icons' );
