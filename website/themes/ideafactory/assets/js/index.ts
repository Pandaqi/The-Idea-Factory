// TOOLS
const shuffleArray = (array) => 
{
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// FOLDABLE SECTIONS
const foldables = Array.from(document.getElementsByClassName("fold-unfold-block")) as HTMLDivElement[];
for(const foldable of foldables)
{
    const header = foldable.getElementsByClassName("fold-unfold-header")[0] as HTMLDivElement;
    const content = foldable.getElementsByClassName("fold-unfold-content")[0] as HTMLDivElement;
    let isFolded = true;
    content.style.display = "none";
    header.addEventListener("click", (_ev) => {
        isFolded = !isFolded;
        content.style.display = isFolded ? "none" : "block";
    });
}

// DOWNLOADING AS MARKDOWN FILES
const downloadButton = document.getElementById("button-download-file");
const fileContents = document.getElementById("file-contents");
if(downloadButton && fileContents)
{
    downloadButton.addEventListener("click", (_ev) => 
    {
        const blob = new Blob([fileContents.innerHTML], { type: 'text/plain' }); 
        const elem = window.document.createElement('a');
        elem.href = window.URL.createObjectURL(blob); 
        elem.download = fileContents.dataset.fileName;
        elem.style.display = 'none';
        document.body.appendChild(elem);
        elem.click();
        document.body.removeChild(elem);
    });
}

// RANDOM PAGES NAVIGATION
const cacheNode = document.getElementById("hugo-article-caching");
if(cacheNode)
{
    // LISTERS populate automatically on load
    const listers = Array.from(document.getElementsByClassName("random-pages-lister")) as HTMLDivElement[];
    const pageURLs = (cacheNode.dataset.pages ?? "").split(",");
    const pageNames = (cacheNode.dataset.titles ?? "").split(",");

    const nameToURL = {};
    for(let i = 0; i < pageURLs.length; i++)
    {
        nameToURL[pageNames[i]] = pageURLs[i];
    }

    shuffleArray(pageNames);

    for(const lister of listers)
    {
        const ul = document.createElement("ul");
        ul.classList.add("remove-list-styles");
        lister.appendChild(ul);

        const numToList = parseInt(lister.dataset.num ?? "5");
        for(let i = 0; i < numToList; i++)
        {
            const li = document.createElement("li");
            ul.appendChild(li);

            const randomElement = pageNames.pop();

            const elem = document.createElement("a");
            elem.classList.add("remove-link-styles");
            elem.href = nameToURL[randomElement];
            elem.innerHTML = randomElement;
            li.appendChild(elem);
        }
    }

    // BUTTONS just take you to a random idea when pressed by user
    const randomButtons = Array.from(document.getElementsByClassName("random-pages-button")) as HTMLButtonElement[];
    for(const btn of randomButtons)
    {
        btn.addEventListener("click", (_ev) => {
            const newURL = pageURLs[Math.floor(Math.random() * pageURLs.length)];
            location.href = newURL;
        });
    }
}

