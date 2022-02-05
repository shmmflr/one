<x-test-component>

    <x-slot name="js">
        <script>
            function test() {
                document.getElementById('ul').style.color = 'green'
            }
        </script>
    </x-slot>


    <x-slot name="title">
        اولین
    </x-slot>

    <ul id="ul" onclick="test()">
        <li>shoeib</li>
        <li>ali</li>
        <li>madi</li>
        <li>mahin</li>
    </ul>


    <x-slot name="style">
        <style>
            ul {
                color: red;
            }
        </style>
    </x-slot>

</x-test-component>
